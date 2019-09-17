package com.example.curiculumvitae;

import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentPagerAdapter;

import java.util.ArrayList;

public class TabFragmentAdapter extends FragmentPagerAdapter {

    private String tabTitle[] = new String[]{"Profile","Education"};

    ArrayList<Fragment>fragments;

    public TabFragmentAdapter(FragmentManager fm, ArrayList<Fragment>fragmentArrayList) {
        super(fm);
        fragments = fragmentArrayList;

    }

    @Override
    public Fragment getItem(int i) {
        switch (i){
            case 0:
                return new BlankFragment();
            case 1:
                return new BlankFragment2();
                default:
                    return null;
        }
    }

    @Override
    public int getCount() {
        return fragments.size();
    }

    @Nullable
    @Override
    public CharSequence getPageTitle(int position) {
        return tabTitle[position];
    }
}
