@extends('layouts.calendar-layout-02')


@section('content')
    <div style="margin-bottom: 2em;">
        <div>Description</div>
        <div>This one is a basic/traditional 1 month calendar.<br> It demonstrates how easy it is to build gridular layouts. Also note the first Saturday and Sunday.</div>
    </div>
    <hr>
    <div style="margin-bottom: 1em;">
        <div>Todo:</div>
        <ul>
            <li><del>Make the days grid.</del></li>
            <li><s>Add a border</s></li>
            <li><s>Add the days header</s></li>
            <li><s>Make sure it has a border</s></li>
            <li><s>Add the month header</s></li>
            <li><s>Make sure it has a border.</s></li>
        </ul>
        <div>Things to control:</div>
        <ul>
            <li>Date Cell height - not possible?</li>
            <li>Date Cell width</li>
        </ul>

        <div>Next Steps:</div>
        <ul>
            <li>Generate the dates in php
                <ul>
                    <li>Figure out the deal with leading and ending days (from previous and next month); my preference is to display them.</li>
                </ul>
            </li>
            <li>Convert to Tailwind</li>
            <li>Use view modules</li>
            <li>Make it responsive</li>
            <li>Make a small one
                <ul>
                    <li>And a multi-month one</li>
                </ul>
            </li>
        </ul>

    </div>


    <div class="calendar-container">
        <div class="header">
            July 2021
        </div>
        <div class="dates-grid-header">
            <div>Monday</div>
            <div>Tuesday</div>
            <div>Wednesday</div>
            <div>Thursday</div>
            <div>Friday</div>
            <div>Saturday</div>
            <div>Sunday</div>
        </div>
        <div class="dates-grid">
            <div class="date-cell">
                <div class="date-cell-header">1</div>
                <div class="date-cell-body">Body</div>
            </div>
            <div class="date-cell">
                <div class="date-cell-header">2</div>
                <div class="date-cell-body"></div>
            </div>
            <div class="date-cell saturday">
                <div class="date-cell-header">3</div>
                <div class="date-cell-body"></div>
            </div>
            <div class="date-cell sunday">
                <div class="date-cell-header">4</div>
                <div class="date-cell-body">Independence Day</div>
            </div>


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
