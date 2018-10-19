<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class Purchase
 *
 * @package App
 * @property string $file_number
 * @property string $client
 * @property string $property
 * @property string $city_town_village
 * @property string $county
 * @property string $seller
 * @property string $agent
 * @property string $seller_attorney
 * @property string $bank_attorney
 * @property string $rep_agmt
 * @property string $approval_letter
 * @property string $seller_approval_letter
 * @property string $search_update_received
 * @property string $survey_update_received
 * @property string $tax_receipts
 * @property string $sewer_water_compliance
 * @property string $pina
 * @property string $proposed_deed_received
 * @property string $mortgage_commitment
 * @property string $mc_rate_lock_expiration
 * @property string $mortgage_commitment_sent_seller
 * @property string $survey_taxes_deed
 * @property string $ordered_title_insurance
 * @property string $title_report_to_seller
 * @property string $title_report_to_bank
 * @property string $hoi_binder
 * @property string $hoi_binder_receipt
 * @property string $closing_statement_received
 * @property string $closing_statement_to_bank
 * @property string $closing
 * @property text $notes
 * @property text $internal_notes
 * @property string $rates
 * @property string $assigned_to
 * @property string $created_by
*/
class Purchase extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['file_number', 'client', 'property', 'city_town_village', 'county', 'seller', 'agent', 'seller_attorney', 'bank_attorney', 'rep_agmt', 'approval_letter', 'seller_approval_letter', 'search_update_received', 'survey_update_received', 'tax_receipts', 'sewer_water_compliance', 'pina', 'proposed_deed_received', 'mortgage_commitment', 'mc_rate_lock_expiration', 'mortgage_commitment_sent_seller', 'survey_taxes_deed', 'ordered_title_insurance', 'title_report_to_seller', 'title_report_to_bank', 'hoi_binder', 'hoi_binder_receipt', 'closing_statement_received', 'closing_statement_to_bank', 'closing', 'notes', 'internal_notes', 'rates', 'assigned_to_id', 'created_by_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAssignedToIdAttribute($input)
    {
        $this->attributes['assigned_to_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    
    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    
}
