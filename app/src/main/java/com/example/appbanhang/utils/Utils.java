package com.example.appbanhang.utils;

import com.example.appbanhang.model.GioHang;
import com.example.appbanhang.model.User;

import java.util.List;

public class Utils {
    public static final String BASE_URL="http://26.246.244.137/banhang/";
    //Đổi ip
    //http://192.168.19.111/banhang/ từ nhà
    //http://26.246.244.137/banhang/ đến trường
    public static List<GioHang> manggiohang;
    public static User user_current = new User();
}
