🐍 Python Dictionary Cheat Sheet

📦 What is a Dictionary?
✅ Stores data in key-value pairs
✅ Keys must be unique and immutable (string, number, tuple)
✅ Values can be any data type
✅ Ordered (Python 3.7+)
✅ Mutable (can add, update, delete items)

---

🔥 Creating a Dictionary
# Empty dictionary
d = {}

# Dictionary with items
d = {"name": "Alice", "age": 25, "city": "Dhaka"}

---

➕ Adding / Updating Items
d["email"] = "alice@example.com"  # Add new item
d["age"] = 26                     # Update existing item

---

❌ Removing Items
Method             Description
pop(key)           Removes item by key and returns its value
popitem()          Removes and returns the last item (key, value)
del d[key]         Deletes item by key
clear()            Removes all items

Examples:
d.pop("city")
d.popitem()
del d["email"]
d.clear()

---

🔍 Accessing Items
print(d["name"])              # Access by key
print(d.get("age"))           # Access using get()
print(d.get("salary", 0))     # Returns 0 if key not found

---

🔁 Looping Through a Dictionary
for key in d:
    print(key, d[key])

for key, value in d.items():
    print(key, value)

for value in d.values():
    print(value)

for key in d.keys():
    print(key)

---

🛠️ Common Methods
Method              Description
keys()              Returns all keys
values()            Returns all values
items()             Returns all key-value pairs as tuples
update(dict2)       Updates the dictionary with another
copy()              Creates a shallow copy of the dictionary

---

📚 Dictionary Comprehension
squares = {x: x*x for x in range(5)}
print(squares)  # {0:0, 1:1, 2:4, 3:9, 4:16}

---

⚠️ Important Tips
❌ Keys must be immutable (string, number, tuple)
❌ Duplicate keys are not allowed (last one overwrites)
✅ Dictionaries are mutable

---

🏁 Summary
🔸 Key-Value storage
🔸 Fast lookup by key
🔸 Mutable and dynamic
🔸 Supports comprehensions and powerful methods
