package com.example.surat.ui.home;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageButton;

import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;

import com.example.surat.R;

import static com.example.surat.R.layout.fragment_home;

public class HomeFragment extends Fragment {

    String HttpUrl = "http://192.168.43.34/suratcode/GetSurat.php";

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {

        View fragmentView = inflater.inflate(fragment_home, container, false);
        ImageButton btn_survei = (ImageButton)fragmentView.findViewById(R.id.btn_survei);

        btn_survei.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getActivity(), Survei.class);
                startActivity(intent);
            }
        });
        return fragmentView;
    }


}
