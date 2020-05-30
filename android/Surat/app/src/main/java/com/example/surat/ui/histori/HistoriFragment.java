package com.example.surat.ui.histori;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProviders;

import com.example.surat.R;

public class HistoriFragment extends Fragment {

    private HistoriViewModel historiViewModel;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        historiViewModel =
                ViewModelProviders.of(this).get(HistoriViewModel.class);
        View root = inflater.inflate(R.layout.fragment_histori, container, false);
        final TextView textView = root.findViewById(R.id.text_histori);
        historiViewModel.getText().observe(getViewLifecycleOwner(), new Observer<String>() {
            @Override
            public void onChanged(@Nullable String s) {
                textView.setText(s);
            }
        });
        return root;
    }
}
