package com.esisa.eschool;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Vector;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ImageButton;
import android.widget.ListView;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import com.esisa.models.MyEvent;
import com.esisa.p01.R;

public class MainActivity extends ActionBarActivity {

	private TextView tv;
	private Spinner spin;
	private String[] array_spinner;
	private ListView myListView;
	private Vector<String> items;
	private ImageButton bt;
	private ArrayList<MyEvent> events;
	HashMap<String,String> map = null;
	List<HashMap<String,String>> eventDataCollection = 
	           new ArrayList<HashMap<String,String>>();
	            
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		 
		events=new ArrayList<MyEvent>();
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);

		spin = (Spinner) findViewById(R.id.spinner1);
		new GetAllCustomerTask().execute(new ApiConnector());

		fillSpinner();
		buttonAction();

	}

	public void setTextToTextView(JSONArray jsonArray) throws JSONException {
		String s = "";
		if (jsonArray.length() > 0) {

			for (int i = 0; i < jsonArray.length(); i++) {
				JSONObject json = null;
				try {

					json = jsonArray.getJSONObject(i);

					s = "Date d'annonce : " + json.getString("date") + "\n"
							+ "Information : " + json.getString("information")
							+ "\n" + "date d'expriration : "
							+ json.getString("dateExp") + "\n" + "Niveau : "
							+ json.getString("niveau") + "\n";
					items.add(s);
					MyEvent e=new MyEvent(json.getString("information"), Integer.parseInt(json.getString("code")), json.getString("date"), json.getString("dateExp"),Integer.parseInt(json.getString("niveau")));
					events.add(e);
					map = new HashMap<String,String>();
					map.put("code",e.getCode()+"");
					map.put("information",e.getInformation()+"");
					map.put("dateDep",e.getDateDep()+"");
					map.put("dateExp",e.getDateExp()+"");
					map.put("niveau",e.getNiveau()+"");
					eventDataCollection.add(map);
					
			         
				} catch (JSONException e) {
					e.printStackTrace();
				}

			}
		//	Binder bindingData = new Binder(this, weatherDataCollection);
		} else {
			items.add("No Event");
		}

	}

	private class GetAllCustomerTask extends
			AsyncTask<ApiConnector, Long, JSONArray> {

		protected JSONArray doInBackground(ApiConnector... params) {

			// int nv=Integer.parseInt(spin.getSelectedItem().toString());

			return params[0].GetAllCustomers(0);
			// return params[0].GetAllCustomers();

		}

		protected void onPostExecute(JSONArray jsonArray) {

			try {
				setTextToTextView(jsonArray);
			} catch (JSONException e) {

				e.printStackTrace();
			}

		}
	}

	void fillSpinner() {
		array_spinner = new String[5];
		array_spinner[0] = "Tout les niveaux";
		array_spinner[1] = "Niveau 1";
		array_spinner[2] = "Niveau 2";
		array_spinner[3] = "Niveau 3";
		array_spinner[4] = "Niveau 4";
		Spinner s = (Spinner) findViewById(R.id.spinner1);
		ArrayAdapter adapter = new ArrayAdapter(this,
				android.R.layout.simple_spinner_item, array_spinner);
		s.setAdapter(adapter);
	}

	
	void fillListView() {
		myListView = (ListView) findViewById(R.id.listView1);

		ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,
				android.R.layout.simple_list_item_1, items);

		myListView.setAdapter(adapter);
	}

	boolean exisitngEvent() {

		for (String s : items) {
			if (s.contains("Niveau : " + spin.getSelectedItemPosition()))
				return true;
		}
		return false;
	}

	public void buttonAction() {
		items = new Vector<String>();
		bt = (ImageButton) findViewById(R.id.imageButton1);

		bt.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View v) {
				if (exisitngEvent()) {
					Intent intent = new Intent(MainActivity.this,
							MainActivity2.class);
					intent.putExtra("niveau", spin.getSelectedItemPosition());
					intent.putExtra("events", events);
					startActivity(intent);
				} else {
					Toast.makeText(getBaseContext(), "No events", 5).show();
				}

			}
		});
	}
	
	
}
