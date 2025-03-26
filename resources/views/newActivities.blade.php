<div>
            <form action="{{ route('activities.store') }}" method="POST">
                @csrf
                
                <select name="type" id="type">
                    @foreach ($activityTypes as $type)
                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                    @endforeach
                </select>
                <input name="user_id" type="number" placeholder="ID">
                <input name="datetime" type="datetime-local" placeholder="Datetime">
                <div>
                    <label for="paid">Is Paid</label>
                    <input type="hidden" name="paid" value="0">
                    <input type="checkbox" id="paid" name="paid" value="1" />
                </div>
                <input name="notes" type="text" placeholder="Notes">
                <input name="satisfaction" type="number" placeholder="Satisfaction">
                
                
                <button type="submit" onclick="return confirm('Are you sure you want to create this activity?')">SAVE</button>
                @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                    @endif
            </form>
</div>
