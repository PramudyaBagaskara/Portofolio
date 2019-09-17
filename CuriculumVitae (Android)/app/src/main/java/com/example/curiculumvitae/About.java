package com.example.curiculumvitae;

import android.support.design.widget.TabLayout;
import android.support.v4.app.Fragment;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import java.util.ArrayList;

public class About extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_about);

        assert getSupportActionBar() != null;   //null check
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        this.setTitle("About Me");

        ArrayList<Fragment> fragments = new ArrayList<>();

        fragments.add(new BlankFragment());
        fragments.add(new BlankFragment2());

        TabFragmentAdapter fragmentAdapter = new TabFragmentAdapter(getSupportFragmentManager(),fragments);


        ViewPager viewPager = findViewById(R.id.viewpage);
        viewPager.setAdapter(fragmentAdapter);
        TabLayout tabLayout = findViewById(R.id.tablay);
        tabLayout.setupWithViewPager(viewPager);
    }

    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }
}
