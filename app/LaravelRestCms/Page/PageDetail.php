<?php namespace App\LaravelRestCms\Page;

use App\LaravelRestCms\BaseModel;
use App\LaravelRestCms\Template\TemplateDetail;

class PageDetail extends BaseModel {

	public static $searchCols = ['data'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'page_detail';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['page_id', 'template_detail_id', 'data'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * Rules to validate when creating a model
	 * 
	* @var array
	 */
	protected static $createRules = [	
		'page_id' => 'integer',
		'template_detail_id' => 'integer',
		'data' => 'required',
	];

	/**
	 * Joins the page_detail table
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function templateDetail()
    {
        return $this->hasMany(TemplateDetail::class, 'id', 'template_detail_id');
    }

}
