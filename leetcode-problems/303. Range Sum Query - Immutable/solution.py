class NumArray(object):

    def __init__(self, nums):
        self.tempArr = []
        sum = 0
        for n in nums:
            sum += n
            self.tempArr.append(sum)
            
    def sumRange(self, left, right):
        leftSum = self.tempArr[left-1] if left > 0 else 0
        rightSum = self.tempArr[right]
        return rightSum - leftSum
