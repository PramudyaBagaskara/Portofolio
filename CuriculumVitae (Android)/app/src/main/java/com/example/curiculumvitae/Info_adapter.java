package com.example.curiculumvitae;

import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import java.util.ArrayList;

public class Info_adapter extends RecyclerView.Adapter<Info_adapter.InfoView> {

    private ArrayList<Info> listinfo;

    public Info_adapter (ArrayList<Info> list) { this.listinfo = list; }


    @NonNull
    @Override
    public InfoView onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        View view = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.list_app, viewGroup, false);
        return new InfoView(view);
    }

    @Override
    public void onBindViewHolder(@NonNull final InfoView infoView, int i) {

        final Info info = listinfo.get(i);

        infoView.nama.setText(info.getNama());
        infoView.c_view.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(infoView.itemView.getContext(),Detail_info.class);
                intent.putExtra(Detail_info.EXTRA_NAME, info.getNama());
                intent.putExtra(Detail_info.EXTRA_DESC, info.getDesc());
                infoView.itemView.getContext().startActivity(intent);

            }
        });

    }

    @Override
    public int getItemCount() {
        return listinfo.size();
    }

    public class InfoView extends RecyclerView.ViewHolder {

        private TextView nama;
        private CardView c_view;

        public InfoView(@NonNull View itemView) {
            super(itemView);

            nama = itemView.findViewById(R.id.judul);
            c_view = itemView.findViewById(R.id.appinfo);
        }
    }
}
