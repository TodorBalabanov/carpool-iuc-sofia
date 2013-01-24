package bg.nbu.infm002;

/**
 * Driver class.
 * 
 * @author Todor Balabanov
 * 
 * @email tdb@tbsoft.eu
 * 
 * @date 09 Dec 2012
 */
public class Driver extends Person {
	
	/**
	 * Driver license id.
	 */
	private String license;
	
	/**
	 * Driver car brand.
	 */
	private String carBrand;
	
	/**
	 * Driver car model.
	 */
	private String carModel;

	/**
	 * Driver car color.
	 */
	private String carColor;

	/**
	 * License id getter.
	 * 
	 * @return License id.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getLicense() {
		return license;
	}

	/**
	 * License id setter.
	 * 
	 * @param license License id.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setLicense(String license) {
		this.license = license;
	}

	/**
	 * Car brand getter.
	 * 
	 * @return Car brand.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getCarBrand() {
		return carBrand;
	}

	/**
	 * Car brand setter.
	 * 
	 * @param carBrand Car brand.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setCarBrand(String carBrand) {
		this.carBrand = carBrand;
	}

	/**
	 * Car model getter.
	 * 
	 * @return Car model.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getCarModel() {
		return carModel;
	}

	/**
	 * Car model setter.
	 * 
	 * @param carModel Car model.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setCarModel(String carModel) {
		this.carModel = carModel;
	}

	/**
	 * Car color getter.
	 * 
	 * @return Car color.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public String getCarColor() {
		return carColor;
	}

	/**
	 * Car color setter.
	 * 
	 * @param carColor Car color.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	public void setCarColor(String carColor) {
		this.carColor = carColor;
	}

	/**
	 * To string.
	 * 
	 * @return String.
	 * 
	 * @author Todor Balabanov
	 * 
	 * @email tdb@tbsoft.eu
	 * 
	 * @date 09 Dec 2012
	 */
	@Override
	public String toString() {
		return( getName() + " : " + getLicense() + " : " + getCarBrand() + " : " + getCarColor());
	}
}
