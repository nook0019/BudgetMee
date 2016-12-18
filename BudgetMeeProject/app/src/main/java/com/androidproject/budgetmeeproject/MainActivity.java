package com.androidproject.budgetmeeproject;


import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;

import com.androidproject.budgetmeeproject.Model.ProfileModel;
import com.androidproject.budgetmeeproject.Adapter.ProfileAdapter;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    ////1.Init Data List
    private ArrayList<ProfileModel> dataset;

    ////2.Init Adapter

    private ProfileAdapter adapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ////3.new data list
        dataset = new ArrayList<ProfileModel>();
        ////4.new Adapter
        adapter = new ProfileAdapter(dataset);
        ////5.call RecycleView
        RecyclerView rcy = (RecyclerView)findViewById(R.id.RCVData);
        ////6.set Adapter of Recycleview
        rcy.setLayoutManager(new LinearLayoutManager(this));
        rcy.setAdapter(adapter);
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        //Check requestCode
        if(requestCode == 5) {
            //check ResultCode
            if (resultCode == RESULT_OK) {
                //7. Get data from intent object
                String money = data.getStringExtra("MONEY");
                String date = data.getStringExtra("DATE");

                ////////////////////////////////////////////////////

                //2. Reference to TextView
                //// TextView tv = (TextView) findViewById(R.id.TV01);

                //3. set Text to TextView
                //// tv.setText("Result " + name + " : " + tel);

                ///////////////////////////////////////////////////

                //8.Add to Data List
                dataset.add(new ProfileModel(money,date));

                //9.Update adapter
                adapter.notifyDataSetChanged();
            }
        }
    }

    public void onClickAddMoney(View v){
        //Create Intent, Where to go
        Intent dointent = new Intent(this, AddDataActivity.class);

        //Start Activity
        startActivityForResult(dointent, 5);

    }

}


