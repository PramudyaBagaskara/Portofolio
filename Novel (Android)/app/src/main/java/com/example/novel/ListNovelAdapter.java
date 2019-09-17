package com.example.novel;

import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

import java.util.ArrayList;

public class ListNovelAdapter extends RecyclerView.Adapter<ListNovelAdapter.ListViewHolder>  {

    private ArrayList<Novel>  listNovel;

    public ListNovelAdapter(ArrayList<Novel> list){
        this.listNovel = list;
    }

    @NonNull
    @Override
    public ListViewHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int viewType) {
        View view = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.item_novel, viewGroup, false);
        return new ListViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull final ListViewHolder holder, int position) {
        final Novel novel= listNovel.get(position);

        Glide.with(holder.itemView.getContext()).load(novel.getPhoto())
                .apply(new RequestOptions().override(55,55))
                .into(holder.imgPhoto);

        holder.tvJudul.setText(novel.getJudul());
        holder.tvPengarang.setText(novel.getPenulis());
        holder.tvHal.setText(novel.getHal());
        holder.tvSis.setText(novel.getSinopsis());
        holder.tvTerbit.setText(novel.getTanggal());
        holder.tvbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(holder.itemView.getContext(), novel.getJudul()+" Telah Ditambahkan Ke Wishlist" ,Toast.LENGTH_SHORT).show();
            }
        });

    }


    @Override
    public int getItemCount() { return listNovel.size(); }

    public class ListViewHolder extends RecyclerView.ViewHolder {
            ImageView imgPhoto;
            TextView tvJudul,tvPengarang, tvTerbit, tvHal, tvSis;
            Button tvbutton;



        public ListViewHolder(@NonNull View itemView) {
            super(itemView);
            imgPhoto = itemView.findViewById(R.id.gambar);
            tvJudul = itemView.findViewById(R.id.judul);
            tvPengarang = itemView.findViewById(R.id.penulis);
            tvTerbit = itemView.findViewById(R.id.rilis);
            tvHal = itemView.findViewById(R.id.hal);
            tvSis = itemView.findViewById(R.id.sinopsis);
            tvbutton = itemView.findViewById(R.id.button);
        }
    }

}
