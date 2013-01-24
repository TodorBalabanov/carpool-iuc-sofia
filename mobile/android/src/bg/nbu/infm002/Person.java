package bg.nbu.infm002;

/**
 * Person is abstract base class.
 * 
 * @author Todor Balabanov
 * 
 * @email tdb@tbsoft.eu
 * 
 * @date 09 Dec 2012
 */
abstract public class Person {

	/**
	 * Person name.
	 */
	private String name;

	/**
	 * Person phone.
	 */
	private String phone;

	/**
	 * Person notes.
	 */
	private String notes;

	/**
	 * Person name getter.
	 * 
	 * @return Person name.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getName() {
		return name;
	}

	/**
	 * Person name setter.
	 * 
	 * @param name Person name.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setName(String name) {
		this.name = name;
	}

	/**
	 * Person phone getter.
	 * 
	 * @return Person phone.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getPhone() {
		return phone;
	}

	/**
	 * Person phone setter.
	 * 
	 * @param phone Person phone.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setPhone(String phone) {
		this.phone = phone;
	}

	/**
	 * Person notes getter.
	 * 
	 * @return Person notes.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getNotes() {
		return notes;
	}

	/**
	 * Person notes setter.
	 * 
	 * @param notes Person notes.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setNotes(String notes) {
		this.notes = notes;
	}

}
