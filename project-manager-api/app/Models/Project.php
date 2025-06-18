protected $fillable = ['title', 'description'];

public function user()
{
    return $this->belongsTo(User::class);
}
