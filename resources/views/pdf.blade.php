<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- Table --}}

    <table class="min-w-full leading-normal table table-striped text-center" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Date
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Schedule start
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Schedule end
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Student
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($other_times as $j)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->date }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->start_schedule }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->end_schedule }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">Anonymous</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>
<br>
<br>
<br>
    {{-- Table --}}

    <table class="min-w-full leading-normal table table-striped text-center" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Date
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Schedule start
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Schedule end
                </th>
                <th
                    style="border: 1px solid #ddd; padding: 5px; background-color: #f2f2f2; text-align: center; font-weight: bold;">
                    Student
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($times as $j)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->date }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->start_schedule }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">{{ $j->end_schedule }}</td>
                    <td style="border: 1px solid #ddd; padding: 5px;">You</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </div>
</body>

</html>
