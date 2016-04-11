package com.esisa.models;
 
import java.util.ArrayList;
 

import com.esisa.p01.R;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;
 
public class MyAdapter extends ArrayAdapter<MyEvent> {
 
        private final Context context;
        private final ArrayList<MyEvent> itemsArrayList;
 
        public MyAdapter(Context context, ArrayList<MyEvent> itemsArrayList) {
 
            super(context, R.layout.row, itemsArrayList);
 
            this.context = context;
            this.itemsArrayList = itemsArrayList;
        }
 
        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
 
            // 1. Create inflater 
            LayoutInflater inflater = (LayoutInflater) context
                .getSystemService(Context.LAYOUT_INFLATER_SERVICE);
 
            // 2. Get rowView from inflater
            View rowView = inflater.inflate(R.layout.row, parent, false);
 
            // 3. Get the two text view from the rowView
            TextView labelView = (TextView) rowView.findViewById(R.id.label);
            TextView valueView = (TextView) rowView.findViewById(R.id.value);
 
            // 4. Set the text for textView 
            labelView.setText("Niv: "+itemsArrayList.get(position).getNiveau()+", "+itemsArrayList.get(position).getInformation());
            valueView.setText(itemsArrayList.get(position).getDateExp());
 
            // 5. retrn rowView
            return rowView;
        }
        
}