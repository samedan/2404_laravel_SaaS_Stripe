<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use App\Models\UsedFeature;
use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    public ?Feature $feature = null;

    public function __construct(){
            $this->feature = Feature::where('route_name', 'feature1.index')
                ->where('active', true)
                ->firstOrFail();
    }

    public function index(){
        return inertia('Feature1/Index', [
            'feature'=> new FeatureResource($this->feature), // not created_at and updated_at
            'answer'=> session('answer')
        ]);

    }

    public function calculate(Request $request){
        $user = $request->user();
        // Check user has enough credits
        if($user->available_credits < $this->feature->available_credits){
            return back();
        }
        $data = $request->validate([
            'number1'=> ['required','numeric'],
            'number2'=> ['required','numeric'],
        ]);
        $number1 = (float) $data['number1'];
        $number2 = (float) $data['number2'];
        $result = $number1 + $number2;
        array_push($data, "Result:".$result);
        // $dataExported = array_merge($data, "Result:".$result);

        $user->decreaseCredits($this->feature->required_credits);

        UsedFeature::create([
            'feature_id' => $this->feature->id,
            'user_id' => $user->id,
            'credits' => $this->feature->required_credits,
            // 'data' => '$data'
            'data' => $data
        ]);

        return to_route('feature1.index')->with('answer', $result);

    }
}
