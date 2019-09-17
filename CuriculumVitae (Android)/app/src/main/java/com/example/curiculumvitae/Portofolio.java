package com.example.curiculumvitae;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class Portofolio extends AppCompatActivity {

    private WebView webV;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_portofolio);

        this.setTitle("Portofolio");

        assert getSupportActionBar() != null;   //null check
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        webV = (WebView) this.findViewById(R.id.web_view);
        webV.getSettings().setLoadsImagesAutomatically(true);
        webV.getSettings().setJavaScriptEnabled(true);
        webV.setWebViewClient(new MyBrowser());
        webV.loadUrl("http://portofolio.bagaskara.space");

        webV.getSettings().setSupportZoom(true);
        webV.getSettings().setBuiltInZoomControls(true);
        webV.getSettings().setDisplayZoomControls(false);
    }

    private class MyBrowser extends WebViewClient {
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            view.loadUrl(url);
            return true;
        }
    }

    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }
}
