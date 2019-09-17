package com.example.curiculumvitae;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class Detail_info extends AppCompatActivity {
    TextView tvNama, tvDesc;
    public static String EXTRA_NAME = "extra_name";
    public static String EXTRA_DESC = "extra_desc";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_info);

        this.setTitle(getIntent().getStringExtra(EXTRA_NAME));

        assert getSupportActionBar() != null;   //null check
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);


        tvNama = findViewById(R.id.nama);
        tvDesc = findViewById(R.id.desc);

        tvNama.setText(getIntent().getStringExtra(EXTRA_NAME));
        tvDesc.setText(getIntent().getStringExtra(EXTRA_DESC));

    }


    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }
}
