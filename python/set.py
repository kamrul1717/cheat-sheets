🐍 Python Set Cheat Sheet (English)

📦 What is a Set?
✅ Unordered (no specific order)
✅ Unique items (no duplicates allowed)
✅ Mutable (can add/remove items)

🔥 Creating a Set
# Empty set
s = set()

# Set with items
s = {1, 2, 3}

➕ Adding Items
Method         Description
add(x)         Adds a single item
update([x])    Adds multiple items

s.add(4)
s.update([5, 6])

❌ Removing Items
Method          Description
remove(x)       Removes x (error if not found)
discard(x)      Removes x (no error if not found)
pop()           Removes a random item
clear()         Removes all items

s.remove(3)
s.discard(10)
s.pop()
s.clear()

🥊 Set Operations
Operation               Code         Description
Union                   A | B        All unique items from both sets
Intersection            A & B        Common items in both sets
Difference              A - B        Items in A but not in B
Symmetric Difference    A ^ B        Items in A or B but not both

A = {1, 2, 3}
B = {3, 4, 5}

A | B  # {1, 2, 3, 4, 5}
A & B  # {3}
A - B  # {1, 2}
A ^ B  # {1, 2, 4, 5}

🧐 Checking Sets
Method             Description
len(s)             Number of items in the set
x in s             Check if x exists in the set
issubset(t)        Checks if all items of s are in t
issuperset(t)      Checks if all items of t are in s
isdisjoint(t)      Checks if sets have no items in common

if 2 in A:
    print("2 is present")

⚠️ Important
❌ No indexing:
s = {1, 2, 3}
print(s[0])  # Error!

🚀 Summary
🔸 Unique Collection
🔸 Fast Membership Test
🔸 Set Theory Operations
