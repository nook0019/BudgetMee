package com.androidproject.budgetmeeproject;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.androidproject.budgetmeeproject.Model.EntityModel;
import com.androidproject.budgetmeeproject.Model.RegisterModel;

/**
 * Created by Pc100 on 15/12/2559.
 */

public class RegisterActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.register_layout);
    }
    public void onClickConfirm(View v){
        EditText name_edt = (EditText)findViewById(R.id.Edt_name);
        EditText username_edt = (EditText)findViewById(R.id.Edt_user);
        EditText password_edt = (EditText)findViewById(R.id.Edt_pass);


        EntityModel entity = new EntityModel();

        //Assign Data to EntityModel object
        entity.getValues().put("name",name_edt.getText().toString());
        entity.getValues().put("username",username_edt.getText().toString());
        entity.getValues().put("password",password_edt.getText().toString());



        //Create ServerConnector object
        ServerConnect connector = new ServerConnect();

        //Connect Web page with Entitymodel object
        String strresult = connector.connect("register.php",true,entity);

        RegisterModel register = new RegisterModel();
        register.setRegisterModel(strresult);

        if (register.getStatus() == null){
            Intent dointent = new Intent(this,loginActivity.class);
            startActivity(dointent);
            finish();
        }else {
            Toast.makeText(this,"Can't register.",Toast.LENGTH_SHORT).show();
        }
    }

    }
