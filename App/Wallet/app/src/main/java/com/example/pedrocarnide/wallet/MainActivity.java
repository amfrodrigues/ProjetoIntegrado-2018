package com.example.pedrocarnide.wallet;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }


    @Override
    protected void onStart() {
        super.onStart();
        Log.d("EstadoSr", "onStart: Estado_Start");
    }

    @Override
    protected void onResume() {
        super.onResume();
        Log.d("EstadoRs", "onResume: Estado_Resume");
    }

    @Override
    protected void onRestart() {
        super.onRestart();
        Log.d("EstadoRc", "onRestart: Estado_Restart");
    }

    @Override
    protected void onPause() {
        super.onPause();
        Log.d("EstadoP", "onPause: Estado_Pause");
    }

    @Override
    protected void onStop() {
        super.onStop();
        Log.d("EstadoSp", "onStop: Estado_Stop");
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        Log.d("EstadoD", "onDestroy: Estado_Destroy");
    }


    public void Login(View view){
        Intent autentificar = new Intent(this,Log_in.class);
        startActivity(autentificar);
    }

    public void Signup(View view){
        Intent criar = new Intent(this,Sign_up.class);
        startActivity(criar);
    }
}
