package com.example.novel;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    private RecyclerView noveldat;
    private ArrayList<Novel> list = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        noveldat = findViewById(R.id.noveldat);
        noveldat.setHasFixedSize(true);

        list.addAll(Data_novel.getListData());
        showItems();



    }

    private void showItems() {
        noveldat.setLayoutManager(new LinearLayoutManager(this));
        ListNovelAdapter dt = new ListNovelAdapter(list);
        noveldat.setAdapter(dt);


    }
}
