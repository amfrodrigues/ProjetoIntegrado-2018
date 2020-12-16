package com.example.pedrocarnide.wallet;

import android.content.Intent;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

public class Sign_up extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);
        Spinner myspinner = (Spinner) findViewById(R.id.spinner1);
        ArrayAdapter myadapter = new ArrayAdapter<String>(Sign_up.this, android.R.layout.simple_expandable_list_item_1, getResources().getStringArray(R.array.spinnercontent));
        myadapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        myspinner.setAdapter(myadapter);
    }
}


