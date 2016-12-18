package com.androidproject.budgetmeeproject.Model;

import android.util.Log;
import org.json.JSONException;
import org.json.JSONObject;

/**
 * Created by Pc100 on 15/12/2559.
 */


public class CustomerModel {

    private int id_user;
    private String username;
    private String password;


    public int getId_user() {
        return id_user;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setCustomerModel(String jsonObjstr){
        try {
            JSONObject data = new JSONObject(jsonObjstr);

            this.username = data.get("username").toString();
            this.password = data.getString("password");
            this.id_user = data.getInt("id_user");

        } catch (JSONException e) {
            Log.d("ERROR::",jsonObjstr);
            e.printStackTrace();
        }
    }

}
