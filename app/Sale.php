<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class Sale
 *
 * @package App
 * @property string $file_number
 * @property string $client
 * @property string $property
 * @property string $city_town_village
 * @property string $county
 * @property string $buyer
 * @property string $agent
 * @property string $buyer_attorney
 * @property string $rep_agmt
 * @property string $approval_letter
 * @property string $buyer_approval_letter
 * @property string $search_update
 * @property string $survey_update
 * @property string $tax_receipts
 * @property string $tax_certificate
 * @property string $sewer_water_compliance
 * @property string $proposed_deed
 * @property string $mortgage_commitment
 * @property string $seach_taxes_deed
 * @property string $mortgage_payoff_info
 * @property string $title_report_from_buyer
 * @property string $clsoing_docs_drafted
 * @property string $closing_statement
 * @property string $closing_statement_to_buyer
 * @property string $closing_date
 * @property text $notes
 * @property text $internal_notes
 * @property string $rates
 * @property string $assigned_to
 * @property string $created_by
*/
class Sale extends Model
{
    use SoftDeletes, FilterByUser;

    protected $fillable = ['file_number', 'client', 'property', 'city_town_village', 'county', 'buyer', 'agent', 'buyer_attorney', 'rep_agmt', 'approval_letter', 'buyer_approval_letter', 'search_update', 'survey_update', 'tax_receipts', 'tax_certificate', 'sewer_water_compliance', 'proposed_deed', 'mortgage_commitment', 'seach_taxes_deed', 'mortgage_payoff_info', 'title_report_from_buyer', 'clsoing_docs_drafted', 'closing_statement', 'closing_statement_to_buyer', 'closing_date', 'notes', 'internal_notes', 'rates', 'assigned_to_id', 'created_by_id'];
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
