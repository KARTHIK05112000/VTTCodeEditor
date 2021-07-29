package com.vtt.webview;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.media.MediaPlayer;
import android.net.Uri;
import android.os.Bundle;
import android.view.WindowManager;
import android.widget.VideoView;

public class slaph extends AppCompatActivity {
VideoView video2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_slaph);
        video2=(VideoView) findViewById(R.id.video2);
        Uri video=Uri.parse("android.resource://"+getPackageName()+"/"+R.raw.s);
        video2.setVideoURI(video);
        video2.setOnCompletionListener(new MediaPlayer.OnCompletionListener() {
            @Override
            public void onCompletion(MediaPlayer mediaPlayer) {
                if (isFinishing())
                    return;
                startActivity(new Intent(slaph.this, MainActivity.class));
                finish();

            }
        });
        video2.start();


    }
}