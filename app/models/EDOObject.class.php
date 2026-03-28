<?php
namespace app\models;

class EDOObject {
    public $display_id;
    public $purchase_date;
    public $id_holding;
    public $value;
    public $bond_type;
    public $periods = 10;

    public $calculated_percentage_rate = [0,0,0,0,0,0,0,0,0,0];

    public $net_interests = [0,0,0,0,0,0,0,0,0,0];
    public $net_daily_period_interest = [0,0,0,0,0,0,0,0,0,0];
    public $net_percentage_returns = [0,0,0,0,0,0,0,0,0,0];
    public $net_current_percentage_return = 0.0;
    public $net_total_interest = 0;
    public $net_current_returns = [0,0,0,0,0,0,0,0,0,0];
    public $net_current_total_interest = 0;
    
    public $gross_interests = [0,0,0,0,0,0,0,0,0,0];
    public $gross_accumulated_interest = [0,0,0,0,0,0,0,0,0,0];
    public $gross_interests_capitalized = [0,0,0,0,0,0,0,0,0,0];
    public $gross_percentage_returns = [0,0,0,0,0,0,0,0,0,0];
    public $gross_total_interest = 0;
    public $gross_current_total_interest = 0;
}