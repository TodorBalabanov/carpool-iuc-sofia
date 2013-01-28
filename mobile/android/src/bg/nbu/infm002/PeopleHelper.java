package bg.nbu.infm002;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class PeopleHelper extends SQLiteOpenHelper {

	public static final String DATABASE_NAME = "carpool.db";

	public static final int SCHEMA_VERSION = 1;

	public PeopleHelper(Context context) {
		super(context, DATABASE_NAME, null, SCHEMA_VERSION);
	}

	@Override
	public void onCreate(SQLiteDatabase db) {
		db.execSQL("create table people (_id integer primary key autoincrement, name varchar(255), phone varchar(255), notes text, license varchar(255), passport varchar(255), brand varchar(255), model varchar(255), color integer);");
	}

	@Override
	public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
	}

	public void insertDriver(String name, String phone, String notes,
			String license, String brand, String model, String color) {
		ContentValues values = new ContentValues();

		values.put("name", name);
		values.put("phone", phone);
		values.put("notes", notes);
		values.put("license", license);
		values.put("brand", brand);
		values.put("model", model);
		// TODO Transform color name to integer 24bit color!
		values.put("color", 0);

		getWritableDatabase().insert("people", "name", values);
	}

	public void insertPassenger(String name, String phone, String notes,
			String passport) {
		ContentValues values = new ContentValues();

		values.put("name", name);
		values.put("phone", phone);
		values.put("notes", notes);
		values.put("passport", passport);

		getWritableDatabase().insert("people", "name", values);
	}

	public Cursor getAllDrivers() {
		return (getReadableDatabase()
				.rawQuery(
						"select _id, name, phone, notes, license, brand, model, color from people where license is not null order by name",
						null));
	}

	public Cursor getAllPassenger() {
		return (getReadableDatabase()
				.rawQuery(
						"select _id, name, phone, notes, passport from people where license is null order by name",
						null));
	}

	public String getName(Cursor c) {
		return( c.getString(1) );
	}

	public String getPhone(Cursor c) {
		return( c.getString(2) );
	}

	public String getNotes(Cursor c) {
		return( c.getString(3) );
	}

	public String getLicense(Cursor c) {
		return( c.getString(4) );
	}

	public String getPassport(Cursor c) {
		return( c.getString(4) );
	}

	public String getBrand(Cursor c) {
		return( c.getString(5) );
	}

	public String getModel(Cursor c) {
		return( c.getString(6) );
	}

	public int getColor(Cursor c) {
		return( c.getInt(7) );
	}

}
