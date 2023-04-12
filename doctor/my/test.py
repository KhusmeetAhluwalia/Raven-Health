import csv

# Open the CSV file in read mode
with open('MOE.csv', 'r') as file:

    # Create a csv reader object
    csv_reader = csv.reader(file)

    # Iterate through each row in the CSV file
    for i, row in enumerate(csv_reader):
        # Check if the cell is in this row
        if 'khusmeet' in row:
            # Find the index of the cell
            j = row.index('khusmeet')
            # Print the index of the cell
            print(f"Cell found at row {i}, column {j}")
