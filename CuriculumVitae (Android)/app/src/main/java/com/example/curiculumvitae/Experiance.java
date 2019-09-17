package com.example.curiculumvitae;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class Experiance extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_experiance);

        assert getSupportActionBar() != null;   //null check
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        this.setTitle("My Experiance");
    }

    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }
}
