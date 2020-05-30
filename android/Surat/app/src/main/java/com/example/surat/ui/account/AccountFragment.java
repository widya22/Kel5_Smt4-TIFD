package com.example.surat.ui.account;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.fragment.app.Fragment;

import com.example.surat.R;

public class AccountFragment extends Fragment {

//    private AccountViewModel accountViewModel;
    public static String KEY_ACTIVITY = "nim";
    TextView textView;

    @Override
    public View onCreateView(LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        //Inflate layout
        View view = inflater.inflate(R.layout.fragment_account, container, false);
        textView = (TextView)view.findViewById(R.id.tv_nim);

        try {
            String message = getArguments().getString(KEY_ACTIVITY);
            if (message != null){
                textView.setText(message);
            }else {
                textView.setText("-");
            }
        }catch (Exception ex){
            ex.printStackTrace();
        }
        return view;
    }
}
