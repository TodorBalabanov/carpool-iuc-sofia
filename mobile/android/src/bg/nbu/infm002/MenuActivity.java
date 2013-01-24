package bg.nbu.infm002;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.widget.Button;

public class MenuActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_menu);

		((Button) findViewById(R.id.driver_registration_item))
				.setOnClickListener(new View.OnClickListener() {
					public void onClick(View v) {
						Intent intent = new Intent(MenuActivity.this,
								DriverRegistrationActivity.class);
						MenuActivity.this.startActivity(intent);
					}
				});

		((Button) findViewById(R.id.passenger_registration_item))
				.setOnClickListener(new View.OnClickListener() {
					public void onClick(View v) {
						Intent intent = new Intent(MenuActivity.this,
								PassengerRegistrationActivity.class);
						MenuActivity.this.startActivity(intent);
					}
				});

		((Button) findViewById(R.id.exit_item))
				.setOnClickListener(new View.OnClickListener() {
					public void onClick(View v) {
						android.os.Process.killProcess(android.os.Process
								.myPid());
					}
				});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		getMenuInflater().inflate(R.menu.activity_menu, menu);
		return true;
	}

}
