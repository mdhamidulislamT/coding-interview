<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Message;
use App\Models\MessageCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DemoController extends Controller
{
    public function admins(): View
    {
        return view('welcome', [
            'admins' => Admin::get()
        ]);
    }

    public function customers(): View
    {
        return view('customers', [
            'customers' => Customer::paginate(10)
        ]);
    }

    public function employees(): View
    {
        return view('employees', [
            'employees' => Employee::withCount(['solved_message', 'assigned_message'])->paginate(5)
        ]);
    }

    public function messageCategories(): View
    {
        return view('message_categories', [
            'message_categories' => MessageCategory::paginate(5)
        ]);
    }

    public function messages(): View
    {
        $employees = Employee::get();

        return view('messages', [
            'employees' => $employees,
            'messages' => Message::paginate(10)
        ]);
    }

    public function assign(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'msg_id' => 'required|array',
        ]);

        Message::whereIn('id', $validated['msg_id'])->update(['employee_id' => $validated['employee_id'], 'status' => 'assigned']);
        return back()->with('success', 'Assigned successfully!');
    }


    public function myMessages($id = 1): View
    {
        $employee = Employee::find($id);

        return view('my_messages', [
            'employee' => $employee,
            'messages' => Message::where('employee_id', $id)->paginate(10)
        ]);
    }


    public function messageUpdate(Request $request, $id)
    {
        $message = Message::find($id);
        if ($message) {
            $message->update(['status' => 'solved']);
            return back()->with('success', 'Completed successfully!');
        }

        return back()->with('success', 'Something went wrong!');
    }
}
