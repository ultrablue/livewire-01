@extends('layouts.calendar-layout-01')


@section('content')
    <div style="margin-bottom: 2em;">
        <div>Description</div>
        <div>This one is a basic/traditional 1 month calendar.<br> It demonstrates how easy it is to build gridular layouts. Also note the first Saturday and Sunday.</div>
    </div>
    <hr>
    <div style="margin-bottom: 1em;">
        <div>Todo:</div>
        <ul>
            <li>Fix the borders.
                <ul>
                    <li>THe header should have a border</li>
                    <li>The column headers should have borders</li>
                    <li>The previous and next month's days should have borders, if wanted.</li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="calendar">
        <div class="month-header">July</div>
        <div class="day-of-week">
            <div>Monday</div>
            <div>Tuesday</div>
            <div>Wednesday</div>
            <div>Thursday</div>
            <div>Friday</div>
            <div>Saturday</div>
            <div>Sunday</div>
        </div>
        <div class="date-grid">
            <div>1</div>
            <div>2</div>
            <div class="saturday">3</div>
            <div class="sunday">4</div>
            <div>5</div>
            <div>6</div>
            <div>7</div>

            <div>8</div>
            <div>9</div>
            <div>10</div>
            <div>11</div>
            <div>12</div>
            <div>13</div>
            <div>14</div>

            <div>15</div>
            <div>16</div>
            <div>17</div>
            <div>18</div>
            <div>19</div>
            <div class="today">20</div>
            <div>21</div>

            <div>22</div>
            <div>23</div>
            <div>24</div>
            <div>25</div>
            <div>26</div>
            <div>27</div>
            <div>28</div>

            <div>29</div>
            <div>30</div>
            <div>31</div>
        </div>
    </div>

@endsection
