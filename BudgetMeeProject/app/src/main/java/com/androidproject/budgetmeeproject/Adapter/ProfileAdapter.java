package com.androidproject.budgetmeeproject.Adapter;

/**
 * Created by Pc100 on 16/12/2559.
 */
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.androidproject.budgetmeeproject.Model.ProfileModel;
import com.androidproject.budgetmeeproject.R;

import java.util.ArrayList;

/**
 * Created by C50 on 9/12/2016.
 */
public class ProfileAdapter extends RecyclerView.Adapter {

    private ArrayList<ProfileModel> dataset;

    public ProfileAdapter(ArrayList<ProfileModel> dataset) {
        this.dataset = dataset;
    }

    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_layout,parent,false);
        ProfileViewHolder current = new ProfileViewHolder(view);
        return current;
    }

    @Override
    public void onBindViewHolder(RecyclerView.ViewHolder holder, int position) {

        ProfileModel model = dataset.get(position);

        ProfileViewHolder cv_holder = (ProfileViewHolder)holder;

        cv_holder.money_tv.setText(model.getMoney());
        cv_holder.date_tv.setText(model.getDate());

    }

    @Override
    public int getItemCount() {
        return dataset.size();
    }

    class ProfileViewHolder extends RecyclerView.ViewHolder {

        public TextView money_tv;
        public TextView date_tv;

        public ProfileViewHolder(View itemView) {
            super(itemView);

            money_tv = (TextView)itemView.findViewById(R.id.TVMoney);
            date_tv = (TextView)itemView.findViewById(R.id.TVDate);
        }
    }
}
