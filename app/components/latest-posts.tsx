import { Post } from "../lib/types";
import { SearchBar } from "./search-bar";

type LatestPostsProps = {
  posts: Post[];
  title?: string;
  searchTerm?: string;
  pageInfo?: {
    startCursor: string | null;
    endCursor: string | null;
    hasNextPage: boolean;
    hasPreviousPage: boolean;
    category?: string | null;
    tag?: string | null;
  };
};

export default function LatestPosts({
  posts,
  title,
  searchTerm,
  pageInfo,
}: LatestPostsProps) {
  return (
    <div className="mb-8">
      <div className="flex justify-between">
        <h2 className="text-xl mb-4">Latest Posts</h2>

        <div>
          <SearchBar />
        </div>
      </div>
    </div>
  );
}
