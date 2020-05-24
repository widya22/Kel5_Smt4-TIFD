package com.example.surat.ui.histori;

import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;
import androidx.lifecycle.ViewModel;

public class HistoriViewModel extends ViewModel {

    private MutableLiveData<String> mText;

    public HistoriViewModel() {
        mText = new MutableLiveData<>();
        mText.setValue("This is histori fragment");
    }

    public LiveData<String> getText() {
        return mText;
    }
}