package com.example.curiculumvitae;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.widget.TextView;

import java.util.ArrayList;

public class Appiinfo extends AppCompatActivity {

    public static String EXTA_NAME = "Extra_Name";
    public static String EXTRA_DESC = "Extra_desc";
    private RecyclerView rc_info;
    private ArrayList<Info> list = new ArrayList<>();
    private TextView tx_name;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_appiinfo);

        this.setTitle("App Info");

        assert getSupportActionBar() != null;   //null check
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        tx_name = findViewById(R.id.judul);

        rc_info = findViewById(R.id.info_app);
        rc_info.setHasFixedSize(true);

        list.addAll(List_info.getListData());
        showInfo();
    }

    private void showInfo() {
        rc_info.setLayoutManager(new LinearLayoutManager(this));
        Info_adapter info_adapter = new Info_adapter(list);
        rc_info.setAdapter(info_adapter);

    }


    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }
}
