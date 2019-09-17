package com.example.curiculumvitae;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.CardView;
import android.view.View;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    private CardView c_skill;
    private CardView c_contact;
    private CardView c_about;
    private CardView c_expe;
    private CardView c_exit;
    private CardView c_info;
    private CardView c_port;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        c_skill = findViewById(R.id.card3);
        c_skill.setOnClickListener(this);

        c_contact = findViewById(R.id.card4);
        c_contact.setOnClickListener(this);

        c_about = findViewById(R.id.card1);
        c_about.setOnClickListener(this);

        c_expe = findViewById(R.id.card2);
        c_expe.setOnClickListener(this);

        c_info = findViewById(R.id.card7);
        c_info.setOnClickListener(this);

        c_port = findViewById(R.id.card5);
        c_port.setOnClickListener(this);

        c_exit = findViewById(R.id.card6);
        c_exit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.card3:
                Intent intent = new Intent(MainActivity.this, Skill.class);
                startActivity(intent);

                break;

            case R.id.card4:
                Intent intent1 = new Intent(MainActivity.this, Contact.class);
                startActivity(intent1);

                break;

            case R.id.card1:
                Intent intent2 = new Intent(MainActivity.this, About.class);
                startActivity(intent2);

                break;

            case R.id.card2:
                Intent intent3 = new Intent(MainActivity.this, Experiance.class);
                startActivity(intent3);

                break;

            case R.id.card7:
                Intent intent4 = new Intent(MainActivity.this, Appiinfo.class);
                startActivity(intent4);

                break;

            case R.id.card5:
                Intent intent5 = new Intent(MainActivity.this, Portofolio.class);
                startActivity(intent5);

                break;



        }
    }




}
