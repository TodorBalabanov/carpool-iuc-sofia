package bg.nbu.infm002;

import java.util.ArrayList;

import android.os.Bundle;
import android.app.TabActivity;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TabHost;
import android.widget.TextView;

public class PassengerRegistrationActivity extends TabActivity {
	private class PassengerHolder {
		private TextView name = null;
		private TextView passport = null;

		public PassengerHolder(View row) {
			name = (TextView) row.findViewById(R.id.name);
			passport = (TextView) row.findViewById(R.id.passport);
		}

		public void populateForm(Passenger p) {
			name.setText(p.getName());
			passport.setText(p.getPassport());
		}
	}

	private class PassengerAdapter extends ArrayAdapter<Passenger> {
		public PassengerAdapter() {
			super(PassengerRegistrationActivity.this,
					android.R.layout.simple_list_item_1, model);
		}

		public View getView(int position, View convertView, ViewGroup parent) {
			View row = convertView;
			PassengerHolder holder = null;

			if (row == null) {
				LayoutInflater inflater = getLayoutInflater();
				row = inflater.inflate(R.layout.passenger_row, null);
				holder = new PassengerHolder(row);
				row.setTag(holder);
			} else {
				holder = (PassengerHolder) row.getTag();
			}

			holder.populateForm(model.get(position));

			return (row);
		}
	}

	private PeopleHelper helper = null;

	private ArrayList<Passenger> model = new ArrayList<Passenger>();

	private PassengerAdapter adapter = null;

	private EditText name = null;
	private EditText passport = null;
	private EditText phone = null;
	private EditText notes = null;

	private View.OnClickListener onSave = new View.OnClickListener() {
		public void onClick(View v) {
			Passenger p = new Passenger();

			p.setName(name.getText().toString());
			p.setPassport(passport.getText().toString());
			p.setPhone(phone.getText().toString());
			p.setNotes(notes.getText().toString());

			adapter.add(p);

			getTabHost().setCurrentTab(0);

			helper.insertPassenger(name.getText().toString(), phone.getText()
					.toString(), notes.getText().toString(), passport.getText()
					.toString());
		}
	};

	private AdapterView.OnItemClickListener onListClick = new AdapterView.OnItemClickListener() {
		public void onItemClick(AdapterView<?> parent, View view, int position,
				long id) {
			Passenger p = model.get(position);

			name.setText(p.getName());
			passport.setText(p.getPassport());
			phone.setText(p.getPhone());
			notes.setText(p.getNotes());

			getTabHost().setCurrentTab(1);
		}
	};

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_passenger_registration);
		((Button) findViewById(R.id.save)).setOnClickListener(onSave);

		adapter = new PassengerAdapter();
		((ListView) findViewById(R.id.passengers)).setAdapter(adapter);
		((ListView) findViewById(R.id.passengers))
				.setOnItemClickListener(onListClick);

		TabHost.TabSpec spec = getTabHost().newTabSpec("tag1");
		spec.setContent(R.id.passengers);
		spec.setIndicator("List");
		getTabHost().addTab(spec);
		spec = getTabHost().newTabSpec("tag2");
		spec.setContent(R.id.details);
		spec.setIndicator("Details");
		getTabHost().addTab(spec);

		name = (EditText) findViewById(R.id.name);
		passport = (EditText) findViewById(R.id.passport);
		phone = (EditText) findViewById(R.id.phone);
		notes = (EditText) findViewById(R.id.notes);

		helper = new PeopleHelper(PassengerRegistrationActivity.this);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		getMenuInflater().inflate(R.menu.activity_passenger_registration, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		return super.onOptionsItemSelected(item);
	}

	@Override
	public void onDestroy() {
		super.onDestroy();
		helper.close();
	}

}
