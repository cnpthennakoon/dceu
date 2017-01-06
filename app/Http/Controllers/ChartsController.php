<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pieChart(){

        $sub1 =Student::selectRaw('count(subject1) as count,subject1')->groupBy('subject1')->get();
        $sub2 =Student::selectRaw('count(subject2) as count,subject2')->groupBy('subject2')->get();
        $sub3 =Student::selectRaw('count(subject3) as count,subject3')->groupBy('subject3')->get();

        $user =array();

        foreach ($sub1 as $result)
        {
            $user[$result->subject1] =(int)$result->count;
        }

        $a = $user['1'];
        $b = $user['2'];
        $c = $user['3'];
        $d = $user['4'];
        $e = $user['5'];
        $f = $user['6'];
        $g = $user['7'];
        $h = $user['8'];
        $i = $user['9'];

        $user1 =array();
        foreach ($sub2 as $result1)
        {
            $user1[$result1->subject2] =(int)$result1->count;
        }


        $j=$user1['1'];
        $k=$user1['2'];
        $l=$user1['3'];
        $m=$user1['4'];
        $n=$user1['5'];
        $o=$user1['6'];
        $p=$user1['7'];
        $q=$user1['8'];
        $r=$user1['9'];



//        return $b1;

        $user2 =array();
        foreach ($sub3 as $result2)
        {
            $user2[$result2->subject3] =(int)$result2->count;
        }

        $s=$user2['1'];
        $t=$user2['2'];
        $u=$user2['3'];
        $v=$user2['4'];
        $w=$user2['5'];
        $x=$user2['6'];
        $y=$user2['7'];
        $z=$user2['8'];
        $z1=$user2['9'];

        $a1=$a+$j+$s;
        $b1=$b+$k+$t;
        $c1=$c+$l+$u;
        $d1=$d+$m+$v;
        $e1=$e+$n+$w;
        $f1=$f+$o+$x;
        $g1=$g+$p+$y;
        $h1=$h+$q+$z;
        $i1=$i+$r+$z1;


        $all = array ("Sociology"=>$a1,"Sinhala"=>$b1,"Political Science"=>$c1,"Buddhist Culture"=>$d1, "Economics"=>$e1, "Geography"=>$f1, "Statistics"=>$g1, "Pali"=>$h1, "History"=>$i1);


        return view('admin.charts.piechart',compact('all'));




    }

    public function index()
    {
        //

        $years = Student::all();

        return view('admin.charts.piechart', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
