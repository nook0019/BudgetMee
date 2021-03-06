package com.androidproject.budgetmeeproject;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;
import com.androidproject.budgetmeeproject.Model.CustomerModel;
import com.androidproject.budgetmeeproject.Model.EntityModel;

/**
 * Created by Pc100 on 15/12/2559.
 */

public class loginActivity extends AppCompatActivity{

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login_layout);
    }


    public void onClickSignin(View v){
        EditText username_edt = (EditText)findViewById(R.id.Edt_user);
        EditText password_edt = (EditText)findViewById(R.id.Edt_password);

        EntityModel entity = new EntityModel();

        //Assign Data to EntityModel object
        entity.getValues().put("login_username",username_edt.getText().toString());
        entity.getValues().put("login_password",password_edt.getText().toString());

        //Create ServerConnector object
        ServerConnect connector = new ServerConnect();

        //Connect Web page with Entitymodel object
        String strresult = connector.connect("login.php",true,entity);
        //Toast.makeText(this, strresult, Toast.LENGTH_SHORT).show();

        //Get JSON to String
        //สร้างกระบวนการตรงนี้ไว้ใน UserModel ไว้หมดแล้ว
        /*
        try {
            JSONObject jdata = new JSONObject(strresult);
            Toast.makeText(this, jdata.get("user_id").toString(), Toast.LENGTH_SHORT).show();
        } catch (JSONException e) {
            e.printStackTrace();
        }
        */

        CustomerModel custom = new CustomerModel();
        custom.setCustomerModel(strresult);

        //ถ้าทุกอย่างเรียบร้อยให้ไปหน้า main
        if (custom.getId_user() != 0){
            Intent dointent = new Intent(this,MainActivity.class);
            startActivity(dointent);
            finish();
        }else {
            Toast.makeText(this,"Username or Password is incorrect.",Toast.LENGTH_SHORT).show();
        }
    }

    public void onClickSignup(View v){
        Intent dointent = new Intent(this, RegisterActivity.class);
        startActivity(dointent);
    }


}

