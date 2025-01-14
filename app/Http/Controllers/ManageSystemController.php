<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EachAgencySystem;
use App\Models\MenuType;

class ManageSystemController extends Controller
{
    //
    public function PagesManageSystem()
    {
        $EachAgencySystem = EachAgencySystem::all();

        return view('admin.manage_system.manage_system', compact('EachAgencySystem'));
    }

    public function CreateNewSystem(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
        ]);

        EachAgencySystem::create([
            'project_name' => $request->project_name,
            'each_agency_status' => 1,
            // 'each_agency_status' => EachAgencySystem::max('each_agency_status') + 1,
        ]);

        return redirect()->back()->with('success', 'System created successfully.');
    }

    public function PagesManageSystemMenu()
    {
        $EachAgencySystem = EachAgencySystem::withCount('menuTypes')->get();

        return view('admin.manage_system_menu.manage_system_menu', compact('EachAgencySystem'));
    }

    public function ManageSystemMenuDetails($id)
    {
        $EachAgencySystem = EachAgencySystem::findOrFail($id);

        $MenuType = MenuType::where('each_agency_systems_id', $id)->get();

        return view('admin.manage_system_menu.manage_system_menu_detail', compact('EachAgencySystem', 'MenuType'));
    }

    public function CreateNewSystemMenuDetails(Request $request, $MenuTypeId)
    {
        $request->validate([
            'menu_type_name' => 'required|string|max:255',
        ]);

        MenuType::create([
            'each_agency_systems_id' => $MenuTypeId,
            'menu_type_name' => $request->menu_type_name,
        ]);

        return redirect()->back()->with('success', 'MenuDetails Created Successfully.');
    }

    public function showMenu()
    {
        $EachAgencySystem = EachAgencySystem::with('menuTypes')->get();

        return view('admin.layout.layout', compact('EachAgencySystem'));
    }
}
