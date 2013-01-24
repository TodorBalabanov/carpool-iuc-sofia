package bg.nbu.infm002;

/**
 * Passenger class.
 * 
 * @author Todor Balabanov
 * 
 * @email tdb@tbsoft.eu
 * 
 * @date 09 Dec 2012
 */
public class Passenger extends Person {
	/**
	 * Passenger passport id.
	 */
	private String passport;

	/**
	 * Passenger passport id getter.
	 * 
	 * @return Passenger passport id.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getPassport() {
		return passport;
	}

	/**
	 * Passenger passport id setter.
	 * 
	 * @param passport Passenger passport id.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setPassport(String passport) {
		this.passport = passport;
	}
}
