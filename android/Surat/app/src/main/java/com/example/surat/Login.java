package com.example.surat;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.example.surat.ui.account.AccountFragment;

import java.util.HashMap;
import java.util.Map;

public class Login extends AppCompatActivity {

    EditText NIM, Password;
    Button Login;
    RequestQueue requestQueue;
    String NIMHolder, PasswordHolder;
    ProgressDialog progressDialog;
    String HttpUrl = "http://192.168.43.251/surat/UserLogin.php";
    Boolean CheckEditText;
    String TempServerResponseMatchedValue = "Data Matched";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);

        NIM = (EditText)findViewById(R.id.EditTextNIM);
        Password = (EditText)findViewById(R.id.EditTextPassword);
        Login = (Button)findViewById(R.id.ButtonLogin);
        requestQueue = Volley.newRequestQueue(Login.this);
        progressDialog = new ProgressDialog(Login.this);

        Login.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                CheckEditTextIsEmptyOrNot();
                if (CheckEditText) {
                    UserLogin();
                } else {
                    Toast.makeText(Login.this, "Please fill all form fields!", Toast.LENGTH_LONG).show();
                }
            }
        });

    }

    public void UserLogin(){
        progressDialog.setMessage("Please Wait!");
        progressDialog.show();

        StringRequest stringRequest = new StringRequest(Request.Method.POST, HttpUrl,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String ServerResponse) {
                        progressDialog.dismiss();
                        if (ServerResponse.equalsIgnoreCase("Data Matched!")) {
                            Toast.makeText(Login.this, "Logged In Successfully", Toast.LENGTH_LONG);
                            finish();
                            Intent intent = new Intent(Login.this, MainActivity.class);
                            startActivity(intent);
                            try {
                                String message = NIM.getText().toString();
                                Bundle data = new Bundle();
                                data.putString(message, AccountFragment.KEY_ACTIVITY);
                                AccountFragment accountFragment = new AccountFragment();
                                accountFragment.setArguments(data);
                                getSupportFragmentManager()
                                        .beginTransaction()
                                        .replace(R.id.frame_layout, accountFragment)
                                        .commit();
                            } catch (Exception e) {
                                e.printStackTrace();
                            }
                        } else {
                            Toast.makeText(Login.this, ServerResponse, Toast.LENGTH_LONG).show();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError volleyError) {
                        progressDialog.dismiss();
                        Toast.makeText(Login.this, volleyError.toString(), Toast.LENGTH_LONG).show();
                    }

                }){
            @Override
            protected Map<String, String> getParams(){
                Map<String, String> params = new HashMap<>();

                params.put("NIM", NIMHolder);
                params.put("PASSWORD_MHS", PasswordHolder);

                return params;
            }
        };

        RequestQueue requestQueue = Volley.newRequestQueue(Login.this);
        requestQueue.add(stringRequest);

    }

    public void CheckEditTextIsEmptyOrNot(){
        NIMHolder = NIM.getText().toString().trim();
        PasswordHolder = Password.getText().toString().trim();

        if (TextUtils.isEmpty(NIMHolder) || TextUtils.isEmpty(PasswordHolder)) {
            CheckEditText = false;
        } else {
            CheckEditText = true;
        }
    }
}

