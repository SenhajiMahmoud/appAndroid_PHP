package com.esisa.models;

import java.io.Serializable;

public class MyEvent implements Serializable{

	private String information;
	private int code;
	private String dateDep;
	private String dateExp;
	private int niveau;
	
	
	public MyEvent(String information, int code, String dateDep, String dateExp,
			int niveau)  {
		super();
		this.information = information;
		this.code = code;
		this.dateDep = dateDep;
		this.dateExp = dateExp;
		this.niveau = niveau;
	}
	
	public MyEvent() {
		// TODO Auto-generated constructor stub
	}
	public String getInformation() {
		return information;
	}
	public void setInformation(String information) {
		this.information = information;
	}
	public int getCode() {
		return code;
	}
	public void setCode(int code) {
		this.code = code;
	}
	public String getDateDep() {
		return dateDep;
	}
	public void setDateDep(String dateDep) {
		this.dateDep = dateDep;
	}
	public String getDateExp() {
		return dateExp;
	}
	public void setDateExp(String dateExp) {
		this.dateExp = dateExp;
	}
	public int getNiveau() {
		return niveau;
	}
	public void setNiveau(int niveau) {
		this.niveau = niveau;
	}

	@Override
	public String toString() {
		return "MyEvent [information=" + information + ", code=" + code
				+ ", dateDep=" + dateDep + ", dateExp=" + dateExp + ", niveau="
				+ niveau + "]";
	}
	
	
	
}
