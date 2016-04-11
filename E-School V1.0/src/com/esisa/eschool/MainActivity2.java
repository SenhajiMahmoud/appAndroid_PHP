package com.esisa.eschool;

import java.util.ArrayList;
import java.util.Vector;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import com.esisa.models.MyAdapter;
import com.esisa.models.MyEvent;
import com.esisa.p01.R;


public class MainActivity2 extends ActionBarActivity {

	
	 
    private ApiConnector ac;
    private ListView myListView; 
    private ArrayList<MyEvent> events=new  ArrayList<MyEvent>();
    int s=0;

	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main_activity2);
		events=(ArrayList<MyEvent>) this.getIntent().getExtras().get("events");
		 
		s=this.getIntent().getExtras().getInt("niveau");
		 

		
		//new GetAllCustomerTask().execute(new ApiConnector());
		//fillListViewOld();
		
		// 1. pass context and data to the custom adapter
        MyAdapter adapter = new MyAdapter(this, generateData());
 
        // 2. Get ListView from activity_main.xml
        ListView listView = (ListView) findViewById(R.id.listView1);
 
        // 3. setListAdapter
        listView.setAdapter(adapter);
    }
 
 
    private ArrayList<MyEvent> generateData(){
        ArrayList<MyEvent> items = new ArrayList<MyEvent>();
        if(s==0){
        	items=events;
            return items;
        }
        else{
        	ArrayList<MyEvent> tmp=new  ArrayList<MyEvent>();
        	for (MyEvent e : events) {
    			if(e.getNiveau()==s){
    				tmp.add(e);
    			}
    		}
        	items=tmp;
            return items;
        }
        
        
    }
/*	void fillListViewOld() {
	myListView = (ListView) findViewById(R.id.listView1);

	ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,
			android.R.layout.simple_list_item_1, items);

	myListView.setAdapter(adapter);
	
	}*/

	/*public void setTextToTextView(JSONArray jsonArray) throws JSONException {
		String s = "";
		
		if(jsonArray.length()!=0){
			
			for (int i = 0; i < jsonArray.length(); i++) {
				JSONObject json = null;
				try {

					json = jsonArray.getJSONObject(i);

					s ="Date d'annonce : " + json.getString("date") + "\n" + "Information : "
							+ json.getString("information") + "\n" + "date d'expriration : "
							+ json.getString("dateExp") + "\n"
							+ "Niveau : "
							+ json.getString("niveau") + "\n";
					items.add(s);
				} catch (JSONException e) {
					e.printStackTrace();
				}

			}
		}
		else{
			items.add("No Event");
		}
		

	}

	private class GetAllCustomerTask extends
			AsyncTask<ApiConnector, Long, JSONArray> {

		protected JSONArray doInBackground(ApiConnector... params) {

			return params[0].GetAllCustomers(s);
			
		}
		protected void onPostExecute(JSONArray jsonArray) {

			try {
				setTextToTextView(jsonArray);
			} catch (JSONException e) {
				
				e.printStackTrace();
			}

		}
	}*/

}
