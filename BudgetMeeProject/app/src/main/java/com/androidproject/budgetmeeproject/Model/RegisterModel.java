package com.androidproject.budgetmeeproject.Model;

import android.util.Log;

import org.json.JSONException;
import org.json.JSONObject;

/**
 * Created by Pc100 on 15/12/2559.
 */

public class RegisterModel {
    private String Status;

    public String getStatus() {
        return Status;
    }

    public void setStatus(String status) {
        Status = status;
    }

    public void setRegisterModel(String jsonObjstr){
        try {
            JSONObject data = new JSONObject(jsonObjstr);

            this.Status = data.get("Status").toString();
        } catch (JSONException e) {
            Log.d("ERROR::",jsonObjstr);
            e.printStackTrace();
        }
    }
}

