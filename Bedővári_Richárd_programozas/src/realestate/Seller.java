/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package realestate;

/**
 *
 * @author bedovarir.20d
 */
public class Seller {
    private int id;
    private String name;
    private String phone;
    
    public Seller(int id, String name, String phone) {
        this.id = id;
        this.name = name;
        this.phone = phone;
    }
    
    public int getId() { return id; }
    public String getName() { return name; }
    public String getPhone() { return phone; }
    
    @Override
    public String toString() {
        return name;
    }
}
