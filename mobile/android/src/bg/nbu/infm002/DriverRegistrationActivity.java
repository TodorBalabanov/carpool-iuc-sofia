package bg.nbu.infm002;

import java.util.ArrayList;
import java.util.Collections;

import android.os.Bundle;

import android.app.TabActivity;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.ListView;
import android.widget.TabHost;
import android.widget.TextView;

public class DriverRegistrationActivity extends TabActivity {
	private class DriverHolder {
		private TextView name = null;
		private TextView license = null;
		private TextView carBrand = null;

		public DriverHolder(View row) {
			name = (TextView) row.findViewById(R.id.name);
			license = (TextView) row.findViewById(R.id.license);
			carBrand = (TextView) row.findViewById(R.id.car_brand);
		}

		public void populateForm(Driver d) {
			name.setText(d.getName());
			license.setText(d.getLicense());
			carBrand.setText(d.getCarBrand());
		}
	}

	private class DriverAdapter extends ArrayAdapter<Driver> {
		public DriverAdapter() {
			super(DriverRegistrationActivity.this,
					android.R.layout.simple_list_item_1, model);
		}

		public View getView(int position, View convertView, ViewGroup parent) {
			View row = convertView;
			DriverHolder holder = null;

			if (row == null) {
				LayoutInflater inflater = getLayoutInflater();
				row = inflater.inflate(R.layout.driver_row, null);
				holder = new DriverHolder(row);
				row.setTag(holder);
			} else {
				holder = (DriverHolder) row.getTag();
			}

			holder.populateForm(model.get(position));

			return (row);
		}
	}

	private ArrayList<Driver> model = new ArrayList<Driver>();

	private DriverAdapter adapter = null;

	private EditText name = null;
	private EditText license = null;
	private EditText phone = null;
	private Spinner carBrand = null;
	private EditText carModel = null;
	private Spinner carColor = null;
	private EditText notes = null;
	
	private ArrayList<String> brands = new ArrayList<String>();
	private ArrayList<String> colors = new ArrayList<String>();
	
	private View.OnClickListener onSave = new View.OnClickListener() {
		public void onClick(View v) {
			Driver d = new Driver();

			d.setName(name.getText().toString());
			d.setLicense(license.getText().toString());
			d.setPhone(phone.getText().toString());
			d.setCarBrand(carBrand.getSelectedItem().toString());
			d.setCarModel(carModel.getText().toString());
			d.setCarColor(carColor.getSelectedItem().toString());
			d.setNotes( notes.getText().toString() );

			adapter.add(d);

			getTabHost().setCurrentTab(0);
		}
	};

	private AdapterView.OnItemClickListener onListClick = new AdapterView.OnItemClickListener() {
		public void onItemClick(AdapterView<?> parent, View view, int position,
				long id) {
			Driver d = model.get(position);

			name.setText(d.getName());
			license.setText(d.getLicense());
			phone.setText(d.getPhone());
			carBrand.setSelection(brands.indexOf(d.getCarBrand()));
			carModel.setText(d.getCarModel());
			carColor.setSelection(colors.indexOf(d.getCarColor()));
			notes.setText(d.getNotes());

			getTabHost().setCurrentTab(1);
		}
	};

	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_driver_registration);

		((Button) findViewById(R.id.save)).setOnClickListener(onSave);

		adapter = new DriverAdapter();
		((ListView) findViewById(R.id.drivers)).setAdapter(adapter);
		((ListView) findViewById(R.id.drivers))
				.setOnItemClickListener(onListClick);

		TabHost.TabSpec spec = getTabHost().newTabSpec("tag1");
		spec.setContent(R.id.drivers);
		spec.setIndicator("List");
		getTabHost().addTab(spec);
		spec = getTabHost().newTabSpec("tag2");
		spec.setContent(R.id.details);
		spec.setIndicator("Details");
		getTabHost().addTab(spec);

		name = (EditText) findViewById(R.id.name);
		license = (EditText) findViewById(R.id.license);
		phone = (EditText) findViewById(R.id.phone);
		carBrand = (Spinner) findViewById(R.id.car_brand);
		carModel = (EditText) findViewById(R.id.car_model);
		carColor = (Spinner) findViewById(R.id.car_color);
		notes = (EditText) findViewById(R.id.notes);
		
		Collections.addAll(brands, getResources().getStringArray(R.array.car_brands));
		//Collections.addAll(colors, getResources().getStringArray(R.array.car_colors));
	}

	public boolean onCreateOptionsMenu(Menu menu) {
		getMenuInflater().inflate(R.menu.activity_driver_registration, menu);
		return true;
	}
}
