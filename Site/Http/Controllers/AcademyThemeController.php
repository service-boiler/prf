<?php

namespace ServiceBoiler\Prf\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use ServiceBoiler\Prf\Site\Models\AcademyTheme;
use ServiceBoiler\Prf\Site\Http\Requests\AcademyThemeRequest;
use ServiceBoiler\Prf\Site\Repositories\AcademyThemeRepository;

class AcademyThemeController extends Controller
{

    protected $academyThemes;

    /**
     * Create a new controller instance.
     *
     * @param AcademyThemeRepository $academyThemes
     */
    public function __construct(AcademyThemeRepository $academyThemes)
    {
        $this->academyThemes = $academyThemes;
    }

    /**
     * Show the shop index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site::admin.academy_theme.index', [
            'repository' => $this->academyThemes,
            'academyThemes'  => $this->academyThemes->paginate(config('site.per_page.academy_theme', 100), ['academy_themes.*'])
        ]);
    }

   public function create(AcademyThemeRequest $request)
    {   
        return view('site::admin.academy_theme.create');
    }
   
   
   public function store(AcademyThemeRequest $request)
    {
       
        $academyTheme = $this->academyThemes->create($request->input('academyTheme'));
        $redirect = redirect()->route('admin.academy-themes.index')->with('success', trans('site::admin.academy_theme.created'));
        
        return $redirect;
    }
    
  /**
     * @param AcademyTheme $academyTheme
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyTheme $academyTheme)
    {   
        // dd($academyTheme);
        return view('site::admin.academy_theme.edit', compact('academyTheme'));
    }
    public function show(AcademyTheme $academyTheme)
    {   
        // dd($academyTheme);
        return view('site::admin.academy_theme.edit', compact('academyTheme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AcademyThemeRequest $request
     * @param  AcademyTheme $academyTheme
     * @return \Illuminate\Http\Response
     */
    public function update(AcademyThemeRequest $request, AcademyTheme $academyTheme)
    {
       
        $academyTheme->update($request->input('academyTheme'));
        $redirect = redirect()->route('admin.academy-themes.edit', $academyTheme)->with('success', trans('site::admin.academy_theme.updated'));
        
        return $redirect;
    }
    
      public function destroy(academyTheme $academyTheme)
    {

        if ($academyTheme->delete()) {
            return redirect()->route('admin.academyThemes.index')->with('success', trans('site::admin.academy_theme.deleted'));
        } else {
            return redirect()->route('admin.academyThemes.show', $academyTheme)->with('error', trans('site::admin.academy_theme.error_deleted'));
        }
    }

 
}